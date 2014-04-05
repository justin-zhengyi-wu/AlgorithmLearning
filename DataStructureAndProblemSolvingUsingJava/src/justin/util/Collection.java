/**
 * 
 */
package justin.util;

import java.io.Serializable;

/**
 * @author Justin Wu
 * 
 */
public interface Collection<T> extends Iterable<T>, Serializable {
	int size();

	boolean isEmpty();

	boolean contains(Object x);

	boolean add(Object x);

	boolean remove(Object x);

	void clear();

	Iterator<T> iterator();

	Object[] toArray();

	<OtherType> OtherType[] toArray(OtherType[] arr);
}
